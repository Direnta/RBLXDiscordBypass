# RBLXDiscordBypass
This essentially bypasses discord's limits on having ROBLOX not being able to post to discord's webhooks.

Step 1:
Enable HttpServices in ROBLOX Studio by executing this in the command bar:
game:GetService("HttpService").HttpEnabled = true

Step 2: 
Add the following as a script in ServerScriptService:
local http = game:GetService("HttpService")
local Data = {
   ["content"] = "Hey! This bypass works!",
   ["webhook"] = "WEBHOOK"
}

Data = http:JSONEncode(Data)

http:PostAsync("https://direnta.github.io/RBLXDiscordBypass/postme.php", Data)
Step 3: 

Now, just replace WEBHOOK with your discord webhook and boom, it should work!
