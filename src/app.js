import express from "express";
import sensorsRoutes from "./routes/sensors.routes.js";
import resultSensRoutes from "./routes/results_sens.routes.js";
//import indexRoutes from "./routes/index.routes.js";

export const app = express();

app.use(express.json())

//app.use(indexRoutes)
app.use('/api', sensorsRoutes);
app.use('/api', resultSensRoutes);

app.use((req, res, next) => {
  res.status(404).json({
    message : 'Endpoint Not Found'
  })
})
