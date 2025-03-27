<?php

return [
  'secret' => env('JWT_SECRET'),

  'ttl' => env('JWT_TTL', 60),

  'algo' => env('JWT_ALGO', 'HS256'),

  'key' => env('JWT_KEY'),

  'curve' => env('JWT_CURVE', 'secp256k1'),

  'payload' => [
    'iss' => env('JWT_ISSUER', null),
    'sub' => env('JWT_SUBJECT', null),
    'aud' => env('JWT_AUDIENCE', null),
    'iat' => env('JWT_IAT', null),
    'exp' => env('JWT_EXP', null),
    'nbf' => env('JWT_NBF', null),
    'jti' => env('JWT_JTI', null),
  ],

  'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),
  'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),
  'force_persistent_claims' => env('JWT_FORCE_PERSISTENT_CLAIMS', false),
];
