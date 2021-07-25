```
docker build -t damdam .
docker run -e PORT=80 -v $(pwd):/app -p 80:80 damdam

```
