# Greenise
This is just an example project which uses Nuxt.js for the frontend and Laravel for the backend.
For information/steps on how to compile the project read the individual READMEs for the [frontend](frontend/README.md) and [backend](backend/README.md).

This project is about a fictional company called Greenise. Any imagery or content is in no way related or supposed to represent any existing entity/company.

Project requires Node 14 and PHP 7.

## Known issues
<details>
<summary>Employees not loading on home page</summary>
<br>
This doesn't happen on other pages. So the issue is already fixed there. The issue lies most likely in how I'm fetching and displaying the data.
</details>
<br>
<details>
<summary>Reason selection not loading on contact page</summary>
<br>
For some reason the bootstrap-select library doesn't properly load on first try. Not going to bother fixing as it's out of scope for this project (following their documented setup so likely a library issue).
</details>
<br>