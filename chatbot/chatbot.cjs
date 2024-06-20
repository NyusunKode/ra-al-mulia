const express = require("express");
const intents = require("./intents.json");

const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.json());

// CORS middleware to allow requests from all origins (for local testing only)
app.use((req, res, next) => {
    res.header("Access-Control-Allow-Origin", "*"); // Replace with your frontend URL in production
    res.header(
        "Access-Control-Allow-Headers",
        "Origin, X-Requested-With, Content-Type, Accept"
    );
    next();
});

app.post("/chat", (req, res) => {
    const { message } = req.body;
    if (!message) {
        return res.status(400).json({ error: "Message is required." });
    }

    const response = handleChat(message);
    res.json({ response });
});

function handleChat(message) {
    const lowerCaseMessage = message.toLowerCase();
    let matchedResponse = "Maaf, saya tidak mengerti pertanyaan Anda.";

    intents.intents.forEach(intent => {
        intent.patterns.forEach(pattern => {
            const regex = new RegExp('\\b' + pattern.toLowerCase() + '\\b', 'i');
            if (regex.test(lowerCaseMessage)) {
                const responses = intent.responses;
                matchedResponse = responses[Math.floor(Math.random() * responses.length)];
            }
        });
    });

    return matchedResponse;
}

app.listen(PORT, () => console.log(`Server started on port ${PORT}`));
