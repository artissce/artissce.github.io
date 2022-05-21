function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hola") {
        return "Hola!";
    } else if (input == "adios") {
        return "Hablamos luego!";
    } else {
        return "Intenta con otra cosa";
    }
}