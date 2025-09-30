const express = require("express");
const app = express();
let balance = 0;
app.use(express.json());
app.use(express.static(".")); // serve index.html
app.post("/credit", (req, res) => {
balance += req.body.amount;
res.json({ balance });
});
app.post("/debit", (req, res) => {
if (req.body.amount > balance) {
return res.json({ balance, error: "Insufficient balance!" });
}
balance -= req.body.amount;
res.json({ balance });
});
app.listen(3000, () =>
console.log("Server running at host http://localhost:3000")
);
