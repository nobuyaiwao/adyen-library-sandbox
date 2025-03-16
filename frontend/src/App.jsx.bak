import React, { useState } from "react";
import axios from "axios";
import "./App.css";

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

  // Handle request body input change
  const handleRequestBodyChange = (event) => {
    setRequestBody(event.target.value);
  };

  // Function to send API request
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
        <div className="left-pane">

          <h1>Adyen API Tester</h1>
          
          {/* API Class Selector */}
          <label>API Class:</label>
          <select value={selectedClass} onChange={(e) => {
            setSelectedClass(e.target.value);
            setSelectedMethod(apiClasses[e.target.value][0]); // Reset method selection
          }}>
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
            rows="6"
            style={{ width: "100%", fontFamily: "monospace" }}
          />

          {/* Send Request Button */}
          <button onClick={sendRequest} style={{ marginTop: "10px" }}>
            Send Request
          </button>

        </div>

        <div className="right-pane">
          <h3>Response</h3>
          <pre>
            {response ? JSON.stringify(response, null, 2) : "No response yet"}
          </pre>
        </div>

      </div>
  );
}

