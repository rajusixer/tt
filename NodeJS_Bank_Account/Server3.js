const http = require("http");
const fs = require("fs");
const server = http.createServer((req, res) => {
// Read the HTML file
fs.readFile("outside.html", (err, data) => {
if (err) {
res.writeHead(404, { "Content-Type": "text/html" });
res.end("<h1>404 File Not Found</h1>");
} else {
res.writeHead(200, { "Content-Type": "text/html" });
res.end(data); // Send HTML content as response
}
});
});
server.listen(4000, () => {
console.log("Server running at http://localhost:4000/");
});
