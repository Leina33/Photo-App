describe('PhotoApp Search Functionality', () => {
    it('should search and display correct results', async () => {
        // Open the PhotoApp (adjust the URL if needed)
        await browser.url('http://localhost:8000');

        // Locate the search bar
        const searchBox = await $('input[type="search"]');

        // Enter a search term
        await searchBox.setValue('album');

        // Simulate pressing 'Enter'
        await browser.keys('Enter');

        // Wait for results to load
        const results = await $$('div.search-result');
        await expect(results).toBeElementsArrayOfSize({ gte: 1 });

        // Check if the first result contains the search term
        const firstResult = await results[0].getText();
        await expect(firstResult.toLowerCase()).toContain('album');
    });
});

