# devops-bilal
devops

## Docker

Build the image locally:

```bash
docker build -t devops-bilal .
```

Run the app with Docker Compose:

```bash
docker compose up --build
```

Then open `http://localhost` in your browser.

The GitHub Actions deploy workflow now rebuilds the container on the EC2 host with `docker compose up -d --build` after pulling the latest code.
