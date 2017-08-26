## Objective: 
create an simple email-based notification system
Please be attentive to the architecture of the application.

## Architecture description: 
Instead of sending emails manually for some actions (like user registered, feedback sent etc) we want to make it event based:

 - There will be a set of special events in system. 
 - Each event will have some defined properties (like user, feedback etc), some unique event id and some logic of building email. 
(for example, user registered event should be sent to registered user’s email, but feedback email should be sent to admins)
 - When event was triggered, the corresponding email should be sent. All params should be passed from event to email’s view

## Tasks: 
 - create events system based of architecture described above
 - create some tests controllers for demonstrate how the system works
 - Proceed like it's a normal project for a client

## Wishes:
Use Laravel’s `Event`/`Mailable` for implement architecture
