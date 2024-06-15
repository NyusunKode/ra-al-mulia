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
    const intent = intents.intents.find((intent) =>
        intent.patterns.some((pattern) =>
            message.toLowerCase().includes(pattern)
        )
    );

    if (intent) {
        const responses = intent.responses;
        return responses[Math.floor(Math.random() * responses.length)];
    } else {
        return "Maaf, saya tidak mengerti pertanyaan Anda.";
    }
}

app.listen(PORT, () => console.log(`Server started on port ${PORT}`));
