import { Router } from "express";

const router = Router();

export const homeController = router.get("/", (_req, res) => {
  try {
    res.json({ msg: "dapr-examples-service-invocation-http-node-backend" });
  } catch (error) {
    console.log(error);
  }
});
