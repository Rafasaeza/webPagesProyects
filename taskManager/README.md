# Notes Manager Application

This is a simple notes management application developed with php and sql and deployed in kubernetes  that allows you to create, read, update, and delete notes easily and efficiently.

## Key features

- Create Notes: You can create new notes by specifying a title and content.
- List Notes: View all existing notes in the application.
- Update Notes: Modify the title or content of an existing note.
- Delete Notes: Remove notes that are no longer needed.

## Technologies Used
- Backend: php container
- Frontend: HTML,CSS
- Database: mysql container e
- Containers: Docker
- Container Orchestrator: Kubernetes

## Docker images and kubernetes object
- Images:
    - php from -> rafasaez/php-sql-app image
    - sql from -> rafasaez/sql-app images
    
- kubernetes yaml(Inside kubernetes directory): 
    - mysql-service.yaml -> for the service of mysql
    - php-service.yaml -> for the service of php
    - mysqk-statefulset.yaml -> for the statefulset of mysql
    - php-deployment.yaml -> for the deployment of php
    - secret-sql-password -> for the secret object where mysql password is storage
## How to run de application
- Firs you need to install kubernetes on docker
- Go to docker desktop, go to settings, kubernetes and click on enable kubernetes
- Open your terminal
- Run the following
    ```bash
    bash prepare-app.sh
    ```
- Once is evry image created run the application
    ```bash
    bash start-app.sh
    ```
- Your application should be running on port 8080 in localhost
- If you want to finish the app just run:
    ```bash
    bash stop-app.sh
    ```
