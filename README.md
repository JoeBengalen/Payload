# Payload

Payload is a data transfer object between the domain layer and the application
layer. The idea is that for every method you call on the domain service/access
layer (domain API), you will receive a Payload instance as answer.


## Usage

### Fetch vs Command methods

There are two types of methods in a domain access layer: First you have
**fetch** methods, which **asks** for data. Second you have **command** methods,
which tell the domain to **perform** a certain action. The Payload status will
tell you if the method was successful or not. Apart from the status the Payload
may contain additional information, such as the requested data or an exception
if something went wrong.


### Payload status

The Payload status can be set and read with the following methods:

 - `setStatus($status)`
 - `getStatus()`

The following Payload statuses are available.

 - `PayloadStatus::FOUND` Requested data found
 - `PayloadStatus::NOT_FOUND` Requested data not found
 - `PayloadStatus::SUCCESS` Action succeeded
 - `PayloadStatus::INVALID` Invalid input
 - `PayloadStatus::ERROR` Error during execution

_WARNING: Do not rely on the constant values as they may change over time!
Always use the constants by their name._


### PayloadFactory

To make the creation of the Payload objects easier there is a `PayloadFactory`
available. This factory contains methods to create payload objects with every
available status or one without a status.

 - `createPayload()` Create a new Payload object
 - `createSuccessPayload()` Create a new Payload object with status success
 - `createFoundPayload()` Create a new Payload object with status found
 - `createNotFoundPayload()` Create a new Payload object with status not found
 - `createInvalidPayload()` Create a new Payload object with status invalid
 - `createErrorPayload()` Create a new Payload object with status error


### Payload data

Apart from the status the Payload can contain a message, the input and the
output of the domain method. To manage that data the following methods are
available in the Payload class.

 - `setMessage(string $message)`
 - `getMessage()`
 - `setInput(mixed $input)`
 - `getInput()`
 - `setOutput(mixed $input)`
 - `getOutput()`

### PayloadInterface

Payload objects should only be created and modified within the domain. If the
domain method has `PayloadInterface` as return type, only the getter methods
will be visible/available to the application.

Of course you could still modify the payload by methods outside of the
interface, but it will at least show you should not use the setter methods.


## Best practice

Explanation of how I intended the Payload objects to be used. You can make up
your own set of rules, but it is recommended to use the same rules throughout
the whole domain.


### Payload status

Fetch methods can return the following payload statuses
 - `PayloadStatus::FOUND`
 - `PayloadStatus::NOT_FOUND`
 - `PayloadStatus::INVALID`
 - `PayloadStatus::ERROR`

Command methods can return the following payload statuses
 - `PayloadStatus::SUCCESS`
 - `PayloadStatus::INVALID`
 - `PayloadStatus::ERROR`


### Payload input/output

For each payload status the following input/output data should be provided

 - `PayloadStatus::FOUND`
    - input: `null` or named array of fetch parameters (if any)
    - output: found entity or collection

 - `PayloadStatus::NOT_FOUND`
    - input: named array of fetch parameters (if any)
    - output: `null`

 - `PayloadStatus::SUCCESS`
    - input: `null`
    - output: created/updated/deleted entity or other relevant data if available

 - `PayloadStatus::INVALID`
    - input: named array of the parameters
    - output: list of error messages

 - `PayloadStatus::ERROR`
    - input: named array of the parameters
    - output: thrown exception

This way you will always have the information you may need. If anything goes
wrong (not found, invalid or error status) you will have the input parameter to
see why. Optionally you may choose to always include the input argument in the
payload.


### Payload message

Payload messages are optional. They may contain a general message about the
status. Such a message could be handy to provide the user with a friendly
message in the application. I would recommend to at least be consistent
throughout the whole domain whether you return a message or not.

Examples:
 - Could not find user
 - User was successfully updated
 - Message successfully marked as read
 - Invalid comment data provided
 - Could not add project
