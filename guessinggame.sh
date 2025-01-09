#!/usr/bin/env bash

# Fonction pour obtenir le nombre de fichiers dans le répertoire actuel
function count_files {
  echo $(ls -1 | wc -l)
}

# Nombre de fichiers à deviner
num_files=$(count_files)

echo "Bienvenue dans le jeu de devinettes !"
echo "Combien de fichiers se trouvent dans le répertoire actuel ?"

while true; do
  read -p "Entrez votre réponse : " guess

  if [[ ! "$guess" =~ ^[0-9]+$ ]]; then
    echo "Veuillez entrer un nombre valide."
    continue
  fi

  if [[ $guess -lt $num_files ]]; then
    echo "Trop bas ! Essayez encore."
  elif [[ $guess -gt $num_files ]]; then
    echo "Trop haut ! Essayez encore."
  else
    echo "Félicitations ! Vous avez deviné le bon nombre de fichiers."
    break
  fi
done
