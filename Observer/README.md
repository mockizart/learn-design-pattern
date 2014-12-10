Observer
====================


`Meanwhile after they are getting married`


**Wife:** What's wrong honey, you looks like very confused these days.

**Husband:** My office want me to build a program about broadcasting announcements system to some departments every time there is a new announcement.

**Wife:** hmmm.. so? it's easy, isn't it? just fetch data from database and send them all.

**Husband:** not as simple as that babe, here the task job:

 1. The program should be able to add new department or remove them from the subscriber list.
 2. Each department has different behaviours "after" or "before" the announcement sent or delivered.
    - "A" Department
        - should be able to generate report and then send them through email to different bosses.
        - only want to get announcement updates with topic "Marketing" only.
        - and should be able to add or change the behaviours.
    - "B" Department
        - only want to get announcement updates with topic "Recruitment" only.
        - and it could add more or change the behaviours.
        - update some data in Database.

**Husband:** I'm thinking about using conditional statement to solving those tasks.

**Wife:** No, you can't do that. it could be troublesome later and lead your controller getting fat like your stomach and looks like spaghetti.

**Husband:** -_- so ? Do you have any idea?

**Wife:** You already heard about observer pattern, don't you?

**Husband:** Yes I have, it's about 2 things right ? `Subject` and `observers`.

**Wife:** Correct!! the subject is `Announcements` and the Observers are `The Departments`.

![strategy diagram](diagram.png?raw=true "strategy diagram")
