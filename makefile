# Variables
TARGET=README.md
SCRIPT=guessinggame.sh

# Règle principale
all: $(TARGET)

$(TARGET): $(SCRIPT)
	echo "# Projet : Guessing Game" > $(TARGET)
	echo "\n## Date de génération" >> $(TARGET)
	echo "$$(date)" >> $(TARGET)
	echo "\n## Nombre de lignes de code" >> $(TARGET)
	echo "$$(wc -l < $(SCRIPT)) lignes" >> $(TARGET)

clean:
	rm -f $(TARGET)
