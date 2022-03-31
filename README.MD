#### Tasks to do

- TASK-1: Connect 2 users through server and display messages in a <section> as <p> in this format `[time] username > message`
- TASK-2: Introduce `Application` class. Will be used to boot the server and setup websocket callbacks.
- TASK-3: Introduce `Channel` and `ChannelRepository` classes and support of `/list` and `/join <channel>` commands 
- TASK-4: Add `User`, `UserRepository` classes and support of `/login <username> <password>` and `/register <username> <password>`. 
- TASK-5: Add `Message`, `MessageRepository` classes and support of `/search <text>` command to find messages by text
- TASK-6: Add emojis. (frontend only);


#### Notes
- Branch name for each task should be `<username>/feature/<task-id>_<task-description>`.
- Each task that was done should be submitted as a pull request into `<username>/master` branch
- Commit messages should look like this:
```
TASK-2:
 - added class Application
 - refactores ...
 - added tests for Aplication class.
 ```

**Example**
```
aharabara/feature/TASK-1_connect-2-clients-through-server > aharabara/master
```