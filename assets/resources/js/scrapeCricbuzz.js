
const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch({ headless: 'new' });
    const page = await browser.newPage();

    await page.goto('https://www.cricket.com');

    // Extract live score information from the page
    const liveScore = await page.evaluate(() => {
        // Your code to extract live score information goes here
        // Example: Assume the live score is in an element with class 'live-score'
        
        return document.querySelector('.overflow-scroll .items-stretch')?.innerHTML || 'Not available';
    });

    console.log(liveScore);

    await browser.close();
})();