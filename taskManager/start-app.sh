kubectl create namespace z2
kubectl apply -f kubernetes/secret-sql-password.yaml -n z2
kubectl apply -f kubernetes/mysql-statefulset.yaml -n z2
kubectl apply -f kubernetes/mysql-service.yaml -n z2
kubectl apply -f kubernetes/php-deployment.yaml -n z2
kubectl apply -f kubernetes/php-service.yaml -n z2
