// Add this import at the top
import React from "react";

import { useState } from "react";

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

  return (
    <div className="container">
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

      {/* Display Request JSON */}
      <h3>Request Body</h3>
      <pre>{requestBody}</pre>
    </div>
  );
}

