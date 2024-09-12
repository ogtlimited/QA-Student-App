@Library("ogtl-build@dev") _

Microservice(
        type: 'ph',
        repo: 'qa-student',
        deployment: 'qa-student',
        image_repository: 'qa-student',
        publiclyAccessible: true,
        namespace: 'ogtl',
        devFlags: "--set autoscaling.enabled=false \
        --set volume.secondVolume.enabled=false \
        --set hostNamePrefix=qastudent-development \
        --set secretObjects.secretName=qastudent-dev \
        --set ingress.enabled=true \
        --set volume.mountPath=/var/www/html/.env \
        --set resources.requests.memory=256Mi \
        --set resources.requests.cpu=250m \
        --set resources.limits.cpu=500 \
        --set resources.limits.memory=520Mi \
        --set probes.readinessProbe.enabled=false \
        --set probes.livenessProbe.enabled=false \
        --set probes.path=/ \
        --set PersistentVolumeClaim.enabled=false \
        --set serviceAccount.name=secret-store",
        commonFlags: "--set image.port=80 \
        --set cron.enabled=false \
        --set service.type=NodePort",
        prodFlags: "--set autoscaling.minReplicas=8 \
        --set autoscaling.maxReplicas=15 \
        --set autoscaling.targetCPUUtilizationPercentage=70 \
        --set autoscaling.targetMemoryUtilizationPercentage=80 \
        --set volume.mountPath=/var/www/html/.env \
        --set volume.enabled=true \
        --set resources.requests.memory=2048Mi \
        --set resources.requests.cpu=1000m \
        --set resources.limits.cpu=4000m \
        --set resources.limits.memory=4000Mi \
        --set ingress.enabled=true \
        --set alb.certarn=arn:aws:acm:eu-west-2:651611223190:certificate/93532aae-9193-48fd-9316-6471fb79fc7b \
        --set hostNamePrefix=qastudent \
        --set secretObjects.enabled=true \
        --set secretObjects.secretName=qastudent-prod \
        --set probes.readinessProbe.enabled=true \
        --set probes.livenessProbe.enabled=true \
        --set probes.path=/api/status \
        --set istio.enabled=false \
        --set alb.development=prod \
        --set PersistentVolumeClaim.enabled=false \
        --set ingress.host=outsourceglobal.com \
        --timeout 1200s \
        --set serviceAccount.name=secret-store"
    )
