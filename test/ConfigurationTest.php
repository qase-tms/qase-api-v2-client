<?php

namespace Qase\APIClientV2\Test;

use Qase\APIClientV2\Configuration;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    public function setUp(): void
    {
        // Reset the default configuration singleton between tests
        Configuration::setDefaultConfiguration(new Configuration());
    }

    public function testUserAgentContainsQaseApiClient(): void
    {
        $config = new Configuration();
        $userAgent = $config->getUserAgent();

        $this->assertMatchesRegularExpression(
            '/qase-api-client[\w-]*/i',
            $userAgent,
            'User-Agent must contain "qase-api-client" substring for backend analytics'
        );
    }

    public function testUserAgentFollowsConvention(): void
    {
        $config = new Configuration();
        $userAgent = $config->getUserAgent();

        $this->assertMatchesRegularExpression(
            '/^qase-api-client-php\/.+$/',
            $userAgent,
            'User-Agent must follow the format: qase-api-client-php/<version>'
        );
    }

    public function testUserAgentIncludesVersion(): void
    {
        $config = new Configuration();
        $userAgent = $config->getUserAgent();

        // Version should be a semver-like string, not "unknown" in a properly installed env
        $this->assertStringStartsWith('qase-api-client-php/', $userAgent);

        $version = substr($userAgent, strlen('qase-api-client-php/'));
        $this->assertNotEmpty($version, 'Version part must not be empty');
    }

    public function testUserAgentCanBeOverridden(): void
    {
        $config = new Configuration();
        $customAgent = 'qase-api-client-php/1.0.0 custom-integration/2.0';
        $config->setUserAgent($customAgent);

        $this->assertEquals($customAgent, $config->getUserAgent());
    }

    public function testDefaultConfigurationHasCorrectUserAgent(): void
    {
        $config = Configuration::getDefaultConfiguration();
        $userAgent = $config->getUserAgent();

        $this->assertMatchesRegularExpression(
            '/qase-api-client[\w-]*/i',
            $userAgent,
            'Default configuration User-Agent must contain "qase-api-client"'
        );
    }

    public function testGetPackageVersionReturnsString(): void
    {
        $version = Configuration::getPackageVersion();
        $this->assertIsString($version);
        $this->assertNotEmpty($version);
    }
}
