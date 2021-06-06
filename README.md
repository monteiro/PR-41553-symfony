# How to test the PR

FrameworkBundle 4.4 with Symfony messenger 5.3 triggers an exception on MessengerPass related to a non-existence alias "messenger.failure_transports.default".

```
docker-compose up
composer install
bin/console 
```

bin/console will trigger the error, that is fixed by the PR: https://github.com/symfony/symfony/pull/41553
The PR fixes this behavior and makes Symfony Messenger 5.3 BC with FrameworkBundle 4.4.

## Generate a message to be consumed

```
bin/console app:mymessage
bin/console messenger:consume async
```

## Confirm that the message is in the failed transport

```
bin/console messenger:consume failed
```
