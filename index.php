<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Webdows 95</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <input class="icon" data-js="opencomplex" type="image" src="image/mycom.png">
  <input class="icon" data-js="openfractal" type="image" src="image/fractal.png">
  <input class="icon" data-js="openfdi" type="image" src="image/server.png">
  <br>
  <span>Complex Manager</span>
  <span>Pimp My Fractal</span>
  <span>FDI_NET1</span>

  </div>


  <div class="complex" style="display: none;">
    <div class="win95">
      <div class="bluebar">
        <p class="title">Complex Manager</p>
        <button name="close" class="close">X</button>
      </div>
      <form action="result.php" method="POST">
        <label for="reel">Partie reelle:</label>
        <input class="input95" type="text" name="reel" autocomplete="off" placeholder="a"> <br>
        <label for="imaginaire ">Partie imaginaire:</label>
        <input class="input95" type="text" name="imaginaire" autocomplete="off" placeholder="b"> <br>
        <input class="midbtn" type="submit" name="submit" value="Execute">
      </form>
    </div>
  </div>


  <div class="fractal" style="display: none;">
    <div class="win95">
      <div class="bluebar">
        <p class="title">Pimp My Fractal</p>
        <button name="close" class="close">X</button>
      </div>
      <form action="result_fractal.php" method="POST">
        <label for="iter">Iteration :</label>
        <input class="input95" type="text" name="iteration" autocomplete="off" placeholder="Iteration"> <br>
        <label for="deg">Degré :</label>
        <input class="input95" type="text" name="degre" autocomplete="off" placeholder="Degré"> <br>
        <input class="midbtn" type="submit" name="submit" value="Execute">
      </form>
    </div>
  </div>
  </div>

    <div class="fdi" style="display: none;">
    <div class="win951">
      <div class="bluebar">
        <p class="title">FDI NET 1</p>
        <button name="close" class="close">X</button>
      </div>
      <div style="padding: 10px;
    height: 550px;
    color: black;
    overflow-x: overlay;">
<h2>Etape 1 :</h2> 
<img src="image/vm.png">
<h2>Etape 2 :</h2>
<p>Depuis la Gateway, on edite le fichier /etc/network/interfaces. <br>
Et on ajoute les lignes suivantes 
Gateway <br>
allow-hotplug eth0<br>
iface eth0 inet dhcp<br>

allow-hotplug eth1<br>
iface eth1 inet static<br>
  address 192.168.0.1<br>
  netmask 255.255.255.0<br>
  network 182.168.0.0<br>
  broadcast 192.168.0.255<br></p>

  <br>
  Manager<br>
  allow-hotplug eth0<br>
iface eth0 inet static<br>
  address 192.168.0.2<br>
  netmask 255.255.255.0<br>
  gateway 192.168.0.1<br>
  <br>
  Web1<br>
  allow-hotplug eth0<br>
iface eth0 inet static<br>
  address 192.168.0.3<br>
  netmask 255.255.255.0<br>
  gateway 192.168.0.1<br>

<br> <h2>Etape 4</h2><br>

nano /etc/sysctl.conf <br>
# Décommenter cette ligne <br>
net.ipv4.ip_forward=1  
<br>
$> sysctl -p  # net.ipv4.ip_forward = 1<br>
$> cat /proc/sys/net/ipv4/ip_forward  # 1<br>
$> iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE<br>
Il suffit verifier l'etat des pings<br>

<br>
<h2>Etape 5</h2>
<br>
Depuis le mac
<br>
$> ssh-keygen<br>
$> ssh-copy-id temp@172.16.1.137<br>
$> ssh-keygen <br>
$> ssh-copy-id temp@192.168.0.2<br>
$> ssh-copy-id temp@192.168.0.3<br>
<h2>Etape 6</h2><br>
$> apt-get install isc-dhcp-server<br>
$> nano /etc/dhcp/dhcpd.conf<br>
subnet 192.168.0.0 netmask 255.255.255.0 {<br>
  range 192.168.0.10 192.168.0.20;<br>
  option routers 192.168.0.1;<br>
}<br>
<img src="image/xp.png">
<br>
<h2>Etape 8</h2>
<br>
$> apt-get install -y apache2 <br>
$> apt-get install -y fail2ban <br>
$> cp /etc/fail2ban/jail.conf /etc/fail2ban/jail.local<br>

$> nano /etc/fail2ban/jail.local<br>

# Change maxretry a 3<br>
[ssh]<br>

enabled  = true<br>
port     = ssh<br>
filter   = sshd<br>
logpath  = /var/log/auth.log<br>
maxretry = 3<br>

# add<br>
[apache-404]<br>

enabled = true<br>
port = http<br>
filter = apache-404<br>
logpath = /var/log/apache*/access*.log<br>
maxretry = 3<br>

$> nano /etc/fail2ban/filter.d/apache-404.conf<br>
# Fail2Ban configuration file<br>
#<br>
#<br>
#<br>

[Definition]<br>

# Option:  failregex<br>
# <br>
# Values:  TEXT<br>
#<br>
failregex =  - - \[.*?\] ".*?" 404<br>
# Option:  ignoreregex<br>
# Notes.:  regex to ignore. If this regex matches, the line is ignored.<br>
# Values:  TEXT<br>
#<br>
ignoreregex =<br>
    </div>
  </div>
  </div>
  </div>
</div>


  <div class="downbar">
    <div class="start"><img src="image/winlogo.png" style="
    width: 30px;
    height: 18px;">Démarrer</div>
    <div class="startMenu">
      <div class="left">
        <div class="webdo">
          Webdows
          <span class="num95">95</span>
        </div>
      </div>
      <div class="menuItem deroul">Programmes</div>
      <div class="menuItem deroul">Mes documents</div>
      <div class="menuItem deroul">Paramètres</div>
     <a href="webconsole.php"> <div class="menuItem">Terminal</div></a>
      <br>
      <br>
      <br>
      <div class="sepa"></div>

      <div class="menuItem">Eteindre</div>
    </div>
  </div>

  </div>
  <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js" integrity="sha256-PsB+5ZEsBlDx9Fi/GXc1bZmC7wEQzZK4bM/VwNm1L6c=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="js/taskbar.js"></script>
  <script src="js/konami.js"></script>


  </div class="window">
</body>

</html>
