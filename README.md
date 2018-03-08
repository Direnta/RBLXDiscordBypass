# RBLXDiscordBypass
This essentially bypasses discord's limits on having ROBLOX not being able to post to discord's webhooks.

# Step 1:
Enable HttpServices in ROBLOX Studio by executing this script in the command bar:
```
game:GetService("HttpService").HttpEnabled = true
```

# Step 2:
Add the following as a script in ServerScriptService:
```
local http = game:GetService("HttpService")
local Data = {
   ["content"] = "Hey! This bypass works!",
   ["webhook"] = "WEBHOOK"
}

Data = http:JSONEncode(Data)

http:PostAsync("https://direnta.github.io/RBLXDiscordBypass/postme/", Data)
```

# Step 3.
Rename the "WEBHOOK" in the ServerScriptService bypass script with your webhook url.

# Done
Congratulations, webhooks should work now!
