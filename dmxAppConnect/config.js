dmx.config({
  "index": {
    "api1": [
      {
        "type": "object",
        "name": "data",
        "sub": [
          {
            "type": "text",
            "name": "info"
          },
          {
            "type": "text",
            "name": "jussi_num"
          },
          {
            "type": "text",
            "name": "status"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "server"
          },
          {
            "type": "text",
            "name": "host"
          },
          {
            "type": "text",
            "name": "access-control-allow-methods"
          },
          {
            "type": "text",
            "name": "content-type"
          },
          {
            "type": "text",
            "name": "access-control-allow-origin"
          },
          {
            "type": "text",
            "name": "connection"
          },
          {
            "type": "text",
            "name": "access-control-allow-headers"
          },
          {
            "type": "text",
            "name": "content-length"
          },
          {
            "type": "text",
            "name": "x-cached"
          }
        ]
      }
    ]
  }
});
