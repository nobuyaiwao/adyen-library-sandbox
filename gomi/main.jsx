import React, { useState } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

const App = () => {
  const [request, setRequest] = useState({
    api: "/payments",
    params: {
      amount: { currency: "EUR", value: 1000 },
      reference: "test-payment",
      paymentMethod: {
        type: "scheme",
        number: "4111111111111111",
        expiryMonth: "03",
        expiryYear: "2030",
        holderName: "John Doe"
      },
      returnUrl: "https://your-site.com/return"
    }
  });

  const [response, setResponse] = useState(null);

  const sendRequest = async () => {
    try {
      const res = await axios.post("http://localhost:8083/run-test", request);
      setResponse(res.data);
    } catch (error) {
      setResponse({ error: error.message });
    }
  };

  return (
    <div>
      <h1>Adyen API Tester</h1>
      <textarea
        rows="10"
        cols="50"
        value={JSON.stringify(request, null, 2)}
        onChange={(e) => setRequest(JSON.parse(e.target.value))}
      />
      <br />
      <button onClick={sendRequest}>Send Request</button>
      <h2>Response:</h2>
      <pre>{JSON.stringify(response, null, 2)}</pre>
    </div>
  );
};

ReactDOM.render(<App />, document.getElementById("root"));

