import { app } from "./app.js"
import { PORT } from "./config.js"

app.listen(PORT)
console.log('Server running...', PORT)
//console.log('Database ', DB_DATABASE)