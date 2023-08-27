const container = document.querySelector(".pokemon-container");
const spinner = document.querySelector("#spinner");

const typeToColorClass = {
    water: "water",
    fire: "fire",
    grass: "grass",
    electric: "electric",
    poison: "poison",
    psychic: "psychic",
    rock: "rock",
    ice: "ice",
    bug: "bug",
    dragon: "dragon",
    ghost: "ghost",
    dark: "dark",
    steel: "steel",
    fairy: "fairy"
};

function fetchPokemon(id) {
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
        .then((res) => res.json())
        .then((data) => {
            getPokemon(data);
            spinner.style.display = "none";
        });
}

function fetchAllPokemons() {
    spinner.style.display = "block";
    fetch(`https://pokeapi.co/api/v2/pokemon?limit=1000`)
        .then((res) => res.json())
        .then((data) => {
            data.results.forEach((pokemon, index) => {
                fetchPokemon(index + 1);
            });
        });
}

function getPokemon(data) {
    const item = document.createElement("a");
    const typeName = data.types[0].type.name;

    const colorClass = typeToColorClass[typeName] || "default";

    item.classList.add("container-item", colorClass);
    item.style.order = data.id;
    item.setAttribute("id", data.id);
    item.setAttribute("href", `/Pokemon/informacion/${data.id}`);
    item.innerHTML = data.name;
    container.appendChild(item);
}

function removeChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}

fetchAllPokemons();

function ocultarAlertaInicioSession() {
    var mensajeInicioSesion = document.querySelector(".AlertaInicioSession");
    if (mensajeInicioSesion) {
        mensajeInicioSesion.style.display = "none";
    }
}

window.onload = function () {
    setTimeout(ocultarAlertaInicioSession, 5000);
};