import { Router } from "express";
import { getResultSensor, getResultSensors } from "../controllers/results_sens.controller.js";

const router = Router();

router.get('/results_sen', getResultSensors);

router.get('/results_sen/:id', getResultSensor);


export default router;