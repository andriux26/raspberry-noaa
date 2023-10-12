cd /raspberry-noaa-v2 
./sh.sh
#git checkout mano
git pull
./install_and_upgrade.sh
./scripts/schedule.sh -t -x
