### 1.3.0 (2014-02-06)

  * Added support for host-based configuration of the bundle

### 1.2.0 (2013-10-29)

  * Bumped symfony dependency to 2.1.0+
  * Fixed invalid trigger of the CORS check when the Origin header is present on same-host requests
  * Fixed fatal error when `allow_methods` was not configured for a given path

### 1.1.1 (2013-08-14)

  * Fixed issue when `allow_origin` is set to `*` and `allow_credentials` to `true`.

### 1.1.0 (2013-07-29)

  * Added ability to set a wildcard on accept_headers

### 1.0.0 (2013-01-07)

  * Initial release