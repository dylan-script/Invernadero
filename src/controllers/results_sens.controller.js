import { pool } from "../db.js";

export const getResultSensors = async (req, res) => {
  try {
    const [rows] = await pool.query('SELECT * FROM results_sen')
    res.json(rows)
  } catch (error) {
    return res.status(500).json({
      message: 'Something goes wrong... men'
    })
  }
}

export const getResultSensor = async (req, res) => {
  try {
    //console.log(req.params.id);
    const [rows] = await pool.query('SELECT * FROM results_sen WHERE id_result = ?', req.params.id)
    //console.log(rows)

    if (rows.length <= 0) return res.status(404).json({
      message: 'Sensor not found'
    })

    res.json(rows[0])
  } catch (error) {
    return res.status(500).json({
      message: 'Something goes wrong...'
    })
  }
}