import { pool } from "../db.js";

export const getSensors = async (req, res) => {
  try {
    const [rows] = await pool.query('SELECT * FROM sensors')
    res.json(rows)
  } catch (error) {
    return res.status(500).json({
      message: 'Something goes wrong... men'
    })
  }
}

export const getSensor = async (req, res) => {
  try {
    //console.log(req.params.id);
    const [rows] = await pool.query('SELECT * FROM sensors WHERE id = ?', req.params.id)
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