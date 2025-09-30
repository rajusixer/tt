const http = require("http");
const server = http.createServer((req, res) => {
res.writeHead(200, { "Content-Type": "text/html" });
res.write("<h1>Welcome to Node.js Web Server</h1>");
res.write("<p>This is an html response</p>");
res.end();
});
server.listen(4000, () => {
console.log("Server running at http://localhost:4000/");
});
