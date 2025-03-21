export const config = {
    runner: 'local',
    specs: [
        './tests/automation/**/*.js'
    ],
    maxInstances: 1,
    capabilities: [{
        browserName: 'chrome'
    }],
    logLevel: 'info',
    bail: 0,
    baseUrl: 'http://localhost:8000',
    waitforTimeout: 10000,
    connectionRetryTimeout: 120000,
    connectionRetryCount: 3,
    services: ['chromedriver'],
    framework: 'mocha',
    reporters: ['spec'],
    mochaOpts: {
        ui: 'bdd',
        timeout: 60000
    }
};

