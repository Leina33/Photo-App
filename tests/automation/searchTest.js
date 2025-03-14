describe('PhotoApp Search Functionality', () => {

    it('should sign up, log in, and search photos/albums correctly', async () => {
        // Open the PhotoApp homepage
        await browser.url('http://127.0.0.1:8000/');

        // Check if the user is already logged in
        const loginButton = await $('button#login');  // Update with correct selector
        if (await loginButton.isDisplayed()) {
            // Sign up process
            const signupButton = await $('button#signup');  // Update with correct selector
            await signupButton.click();

            const emailInput = await $('input#email');  // Update with correct selector
            const passwordInput = await $('input#password');  // Update with correct selector
            const submitButton = await $('button#submit');  // Update with correct selector

            // Fill in the sign-up details
            await emailInput.setValue('testuser@example.com');
            await passwordInput.setValue('TestPassword123');
            await submitButton.click();

            // Wait for sign up to complete and page to load
            await browser.waitUntil(async () => {
                return (await $('h1')).getText() === 'Welcome';  // Update with correct text
            }, {
                timeout: 5000,
                timeoutMsg: 'Sign up did not complete in time'
            });
        }

        // Log in process (if not logged in already)
        await loginButton.click();

        const loginEmailInput = await $('input#email');  // Update with correct selector
        const loginPasswordInput = await $('input#password');  // Update with correct selector
        const loginSubmitButton = await $('button#submit');  // Update with correct selector

        await loginEmailInput.setValue('testuser@example.com');
        await loginPasswordInput.setValue('TestPassword123');
        await loginSubmitButton.click();

        // Wait for login to complete and the user to be directed to the home page
        await browser.waitUntil(async () => {
            return (await $('h1')).getText() === 'Home';  // Update with correct text
        }, {
            timeout: 5000,
            timeoutMsg: 'Login did not complete in time'
        });

        // Navigate to the photo/album listing page
        await browser.url('http://127.0.0.1:8000/photos');  // Adjust to the actual URL for the photo listing

        // Locate the search bar
        const searchBox = await $('input[type="search"]');  // Adjust selector if necessary

        // Enter a search term
        await searchBox.setValue('album');

        // Simulate pressing 'Enter'
        await browser.keys('Enter');

        // Wait for results to load and validate the results
        const results = await $$('div.search-result');  // Adjust selector for the results
        await expect(results).toBeElementsArrayOfSize({ gte: 1 });

        // Check if the first result contains the search term
        const firstResult = await results[0].getText();
        await expect(firstResult.toLowerCase()).toContain('album');
    });
});
