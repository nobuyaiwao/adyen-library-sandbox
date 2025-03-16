import React, { useState } from "react";
import axios from "axios";
import "./App.css"; // Make sure to include styling for error highlighting

const apiClasses = {
  Checkout: ["/payments", "/payments/details"],
  Recurring: ["/listRecurringDetails", "/disable"],
  Management: ["/me", "/merchantAccounts"]
};

export default function App() {
  const [selectedClass, setSelectedClass] = useState("Checkout");
  const [selectedMethod, setSelectedMethod] = useState("/payments");
  const [requestBody, setRequestBody] = useState(
    JSON.stringify({ amount: { currency: "EUR", value: 1000 } }, null, 2)
  );
  const [response, setResponse] = useState(null);
  const [isJsonError, setIsJsonError] = useState(false);

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
      const requestData = JSON.parse(requestBody);
      const res = await axios.post("http://localhost:8083/run-test", {
        api: selectedMethod,
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
            setSelectedMethod(apiClasses[e.target.value][0]); // Reset method selection
          }}
        >
          {Object.keys(apiClasses).map((apiClass) => (
            <option key={apiClass} value={apiClass}>{apiClass}</option>
          ))}
        </select>

        {/* API Method Selector */}
        <label>API Method:</label>
        <select value={selectedMethod} onChange={(e) => setSelectedMethod(e.target.value)}>
          {apiClasses[selectedClass].map((method) => (
            <option key={method} value={method}>{method}</option>
          ))}
        </select>

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

