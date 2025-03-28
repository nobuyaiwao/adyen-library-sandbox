import React, { useState,useEffect } from "react";
import axios from "axios";
import "./App.css"; // Make sure to include styling for error highlighting
import requestTemplates from "./requestTemplates.json"; // Import the request templates

const apiClasses = {
  Checkout: [
    "/payments",
    "/payments/details",
    "/payments/sessions",
    "/payments/{paymentPspReference}/cancel",
    "/payments/{paymentPspReference}/capture",
    "/payments/{paymentPspReference}/refund",
    "/payments/{paymentPspReference}/reversal",
    "/payments/{paymentPspReference}/amountUpdates",
    "/paymentMethods",
    "/paymentMethods/balance",
    "/paymentMethods/{paymentMethod}/issuers",
    "/orders",
    "/orders/cancel",
    "/originKeys",
    "/clientKeys",
    "/storedPaymentMethods",
    "/storedPaymentMethods/{recurringDetailReference}",
    "/storedPaymentMethods/{recurringDetailReference}/disable",
    "/terminalApi/sync",
    "/terminalApi/async"
  ],
  Recurring: ["/listRecurringDetails", "/disable"],
  Management: ["/me", "/merchantAccounts"]
};

export default function App() {
  const [selectedClass, setSelectedClass] = useState("Checkout");
  const [selectedMethod, setSelectedMethod] = useState("/payments");
  const [pspReference, setPspReference] = useState(""); 
  const [requestBody, setRequestBody] = useState(
    //JSON.stringify({ amount: { currency: "EUR", value: 1000 } }, null, 2)
    JSON.stringify(requestTemplates["/payments"], null, 2) // Initialize with the first method's template
  );
  const [response, setResponse] = useState(null);
  const [isJsonError, setIsJsonError] = useState(false);
  const [formattedEndpoint, setFormattedEndpoint] = useState("");


  // Function to update the displayed endpoint when PSP Reference changes
  const updateFormattedEndpoint = (method, reference) => {
        let apiEndpoint = method;
        if (apiEndpoint.includes("{paymentPspReference}")) {
              apiEndpoint = apiEndpoint.replace("{paymentPspReference}", reference || "ENTER_PSP_REFERENCE");
            }
            setFormattedEndpoint(apiEndpoint);
          };

  // Check if the selected method requires PSP Reference
  const requiresPspReference = selectedMethod.includes("{paymentPspReference}");

  // Handle request body input change
  const handleRequestBodyChange = (event) => {
    const inputValue = event.target.value;
    setRequestBody(inputValue);

    try {
      JSON.parse(inputValue);
      setIsJsonError(false); // Reset error state if valid
    } catch (error) {
      setIsJsonError(true);
    }
  };

  // Handle PSP Reference change
  const handlePspReferenceChange = (event) => {
    const newPspReference = event.target.value;
    setPspReference(newPspReference);
  
    if (selectedMethod.includes("{paymentPspReference}")) {
      let updatedRequestBody = JSON.stringify(requestTemplates[selectedMethod], null, 2);
      updatedRequestBody = updatedRequestBody.replace("{paymentPspReference}", newPspReference);
      setRequestBody(updatedRequestBody);
    }
  };

  // Handle API method change and update request body template
  const handleMethodChange = (method) => {
    setSelectedMethod(method);
    setPspReference(""); // Reset PSP Reference input on method change
    let updatedRequestBody = JSON.stringify(requestTemplates[method] || {}, null, 2);

    setRequestBody(updatedRequestBody);
    updateFormattedEndpoint(method, ""); 
  };


  // Beautify JSON input
  const beautifyJson = () => {
    try {
      setRequestBody(JSON.stringify(JSON.parse(requestBody), null, 2));
      setIsJsonError(false);
    } catch (error) {
      setIsJsonError(true);
    }
  };

  // Send API request
  const sendRequest = async () => {
    try {
      //let requestData = JSON.parse(requestBody);
      const requestData = JSON.parse(requestBody);

      // Replace {paymentPspReference} in the URL
      let apiEndpoint = selectedMethod;
      if (apiEndpoint.includes("{paymentPspReference}")) {
        if (!pspReference) {
          setResponse({ error: "PSP Reference is required for this endpoint." });
          return;
        }
        apiEndpoint = apiEndpoint.replace("{paymentPspReference}", pspReference);
      }

      // If PSP Reference is required, replace placeholder in JSON
      //if (requiresPspReference && pspReference) {
      //  requestData = JSON.parse(JSON.stringify(requestData).replace("ENTER_PSP_REFERENCE", pspReference));
      //}

      const res = await axios.post("http://localhost:8083/run-test", {
        api: apiEndpoint,
        params: requestData
      });
      setResponse(res.data);
    } catch (error) {
      setResponse({ error: error.message });
    }
  };

  return (
    <div className="app-container">
      {/* Left Panel */}
      <div className="left-panel">
        <h1>Adyen Library Sandbox</h1>

        {/* API Class Selector */}
        <label>API Class:</label>
        <select
          value={selectedClass}
          onChange={(e) => {
            setSelectedClass(e.target.value);
            //setSelectedMethod(apiClasses[e.target.value][0]); // Reset method selection
            const firstMethod = apiClasses[e.target.value][0] || "";
            //setSelectedMethod(firstMethod); // Reset method selection dynamically
            handleMethodChange(firstMethod); // Update request body too
          }}
        >
          {Object.keys(apiClasses).map((apiClass) => (
            <option key={apiClass} value={apiClass}>{apiClass}</option>
          ))}
        </select>

        {/* API Method Selector */}
        <label>API Method:</label>
        <select value={selectedMethod} onChange={(e) => handleMethodChange(e.target.value)}>
          {apiClasses[selectedClass].map((method) => (
            <option key={method} value={method}>{method}</option>
          ))}
        </select>

        {/* Show PSP Reference input field if the method requires it */}
        {selectedMethod.includes("{paymentPspReference}") && (
          <div>
            <label>Original PSP Reference:</label>
            <input
              type="text"
              value={pspReference}
              onChange={(e) => {
                  setPspReference(e.target.value)
                  updateFormattedEndpoint(selectedMethod, e.target.value); // Update formatted endpoint on change
                  }}
            />
            {/* Display the formatted endpoint */}
            <p><strong>Request Endpoint:</strong> {formattedEndpoint}</p>
          </div>
        )}

        {/* Request JSON Editor */}
        <h3>Request Body</h3>
        <textarea
          value={requestBody}
          onChange={handleRequestBodyChange}
          rows="20"
          className={isJsonError ? "json-error" : ""}
        />

        {/* Beautify & Send Buttons */}
        <div className="button-group">
          <button onClick={beautifyJson}>Beautify JSON</button>
          <button onClick={sendRequest}>Send Request</button>
        </div>
      </div>

      {/* Right Panel */}
      <div className="right-panel">
        <h3>Response</h3>
        <pre className="response-box">
          {response ? JSON.stringify(response, null, 2) : "No response yet"}
        </pre>
      </div>
    </div>
  );
}
