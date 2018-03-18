## Output shapes in browser or console with sample settings

![](https://github.com/sanchescom/asciishapes/blob/master/shapes.png)

Available sizes;

 - Small
 - Medium
 - Large
 
## Run
Clone the repo
```sh
git clone https://github.com/sanchescom/asciishapes.git
cd test-form
```
Add host in hosts file
```sh
echo "127.0.0.1 asciishapes.d" >> /etc/hosts
```
Install [Docker](https://docs.docker.com/) and [Docker Compose](https://docs.docker.com/compose/)

Build and run the Docker containers
```sh
docker-compose up -d && docker-compose up
```
Start in console
```sh
docker exec asciishapes_app_1 php index.php --size=small --amount=3
```
Start in browser
[http://asciishapes.d:8091/?size=small&amount=3](http://asciishapes.d:8091/?size=small&amount=3)
