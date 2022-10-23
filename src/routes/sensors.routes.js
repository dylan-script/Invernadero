import { Router } from "express";
import { getSensors, getSensor } from "../controllers/sensors.controller.js";

const router = Router();

router.get('/sensors', getSensors);

router.get('/sensors/:id', getSensor);


export default router;