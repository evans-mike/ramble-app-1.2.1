## Setup

1. Install [Docker for Mac](https://www.docker.com/products/docker)
2. Start RambleApp

        docker-compose up -d

3. Install dependencies (I think)

        cd ramble-app-1.2.1

        npm install

Also
        npm install --global gulp-cli

## Contributing

        * Pull the latest.

                git pull origin master

        * Create a feature branch. For example:

                git checkout -b adding-feature

        * Make your changes.

        * Commit the work to your feature branch. For example:

                git commit -am "Added feature."

        * Push your changes. For example:

                git push origin adding-feature

        * (need to change this step) Visit BitBucket and open a new Pull Request from your feature branch to the `master` branch.

## Deployment

We use [Wercker](http://devcenter.wercker.com/index.html) for deployment.
