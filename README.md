
# Manual Testing Plan for Photo-App

## Overview

**Project Name:** Photo-App  
**Tested by:** DOMINIC KIPROP RUTTO  
**Date:** 12TH MARCH 2025  

## Test Environment
- **Browser:** Chrome, Firefox
- **Operating System:** Windows 10, 11 & Ubuntu
- **Backend:** PHP (XAMPP)
- **API Data Source:** [jsonplaceholder](https://jsonplaceholder.typicode.com/)

---

## Environment Setup

Follow these steps to set up the environment for running and testing the Photo-App:

1. **Rename environment configuration file:**
   - Rename `.env.example` to `.env`

2. **Configure Database:**
   - Uncomment database configuration settings
   - Change database driver from `sqlite` to `mysql`
   - Rename `APP_NAME` to your preferred app name

3. **Install Dependencies:**
   - Run the following commands to install required dependencies:
   ```bash
   composer install
   ```

4. **Generate Application Key:**
   - Generate a new application key:
   ```bash
   php artisan key:generate
   ```

5. **Update Dependencies:**
   - Ensure all dependencies are up to date:
   ```bash
   composer update
   ```

6. **Run Database Migrations:**
   - Migrate the database schema:
   ```bash
   php artisan migrate
   ```

7. **Install and Build Frontend Assets:**
   - Install Node.js packages and build frontend assets:
   ```bash
   npm install
   npm run dev
   ```

8. **Start the Development Server:**
   - Serve the application:
   ```bash
   php artisan serve
   ```

---

## Test Cases

| Test Case ID | Test Scenario            | Test Steps          | Expected Result | Actual Result | Status (Pass/Fail) | Remarks |
| ------------ | ------------------------ | ------------------- | --------------- | ------------- | ------------------ | ------- |
| TC001        | Verify Landing Page Load | 1. Open the browser <br> 2. Enter the app URL <br> 3. Observe the landing page  | The landing page should load with no errors  | The landing page loaded successfully without any errors | Pass | None |
| TC002        | Login Functionality      | 1. Click on login <br> 2. Enter valid username and password <br> 3. Click Submit | User should be redirected to Home page with user-specific content | Page refreshed without logging in | Fail | Reported bug BUG001 |
| TC003        | Invalid Login            | 1. Click on login <br> 2. Enter invalid username or password <br> 3. Click Submit | An error message should be displayed indicating invalid credentials | Error message 'Invalid credentials' appeared | Pass | None |
| TC004        | View User Details        | 1. Login as authenticated user <br> 2. Navigate to User page | A list of users with details should be displayed | User details displayed correctly | Pass | None |
| TC005        | Search Functionality     | 1. Login <br> 2. Use the search bar to find a user/album/photo | Relevant search results should be displayed | Correct search results appeared | Pass | None |
| TC006        | View Album               | 1. Login <br> 2. Go to Albums page and click on an album | The selected album's photos should be displayed | Album photos displayed as expected | Pass | None |
| TC007        | Photo Navigation         | 1. Navigate through photos using Next/Previous buttons | Photos should change accordingly | Photos navigated correctly | Pass | None |
| TC008        | Logout                   | 1. Click Logout button | The user should be logged out and redirected to the landing page | User logged out and returned to landing page | Pass | None |

---

## Bug Report

| Bug ID | Test Case ID | Bug Description                                                   | Severity (Low/Medium/High) | Status (Open/Closed) | Remarks   |
| ------ | ------------ | ----------------------------------------------------------------- | -------------------------- | -------------------- | --------- |
| BUG001 | TC002        | Login page refreshes without logging in despite valid credentials | High                       | Open                 | Needs Fix |

---

## Summary

- **Total Test Cases:** 8
- **Passed:** 7
- **Failed:** 1
- **Pending:** 0

=========================================================