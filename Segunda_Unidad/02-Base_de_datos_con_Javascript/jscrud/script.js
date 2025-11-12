// --- Configuración de la base de datos ---
let db;
const DB_NAME = "data";
const DB_VERSION = 1;
const STORE_NAME = "person";

document.addEventListener("DOMContentLoaded", () => {
  abrirDB();
});

// --- Abrir o crear la base de datos ---
function abrirDB() {
  const request = indexedDB.open(DB_NAME, DB_VERSION);

  request.onupgradeneeded = function (event) {
    db = event.target.result;
    if (!db.objectStoreNames.contains(STORE_NAME)) {
      const store = db.createObjectStore(STORE_NAME, { keyPath: "id", autoIncrement: true });
      store.createIndex("p_nombres", "p_nombres", { unique: false });
      store.createIndex("p_apellidos", "p_apellidos", { unique: false });
    }
    console.log("✅ Base de datos creada o actualizada");
  };

  request.onsuccess = function (event) {
    db = event.target.result;
    console.log("📦 Base de datos abierta correctamente");
    mostrarPersona();
  };

  request.onerror = function (event) {
    console.error("❌ Error al abrir la base de datos:", event.target.errorCode);
  };
}

// --- Guardar persona (crear o editar) ---
function guardarPersona(tipo) {
  const Idp = document.getElementById("idp").value;
  const Nombres = document.getElementById("nombres").value.trim();
  const Apellidos = document.getElementById("apellidos").value.trim();

  if (!Nombres || !Apellidos) {
    alert("Completa los campos de Nombres y Apellidos");
    return;
  }

  const transaction = db.transaction([STORE_NAME], "readwrite");
  const store = transaction.objectStore(STORE_NAME);

  if (tipo == 0) {
    // Crear nuevo
    store.add({ p_nombres: Nombres, p_apellidos: Apellidos });
    console.log("✅ Persona agregada");
  } else {
    // Editar existente
    const id = parseInt(Idp);
    store.put({ id: id, p_nombres: Nombres, p_apellidos: Apellidos });
    console.log("✏️ Persona actualizada");
  }

  transaction.oncomplete = () => {
    document.getElementById("formu").reset();
    mostrarPersona();
  };

  transaction.onerror = (event) => {
    console.error("❌ Error en la transacción:", event.target.error);
  };
}

// --- Mostrar personas ---
function mostrarPersona() {
  const tbody = document.getElementById("tbody");
  tbody.innerHTML = "";

  const transaction = db.transaction([STORE_NAME], "readonly");
  const store = transaction.objectStore(STORE_NAME);
  const request = store.openCursor();

  request.onsuccess = (event) => {
    const cursor = event.target.result;
    if (cursor) {
      const row = cursor.value;
      tbody.innerHTML += `
        <tr>
          <td>${row.id}</td>
          <td>${row.p_nombres}</td>
          <td>${row.p_apellidos}</td>
          <td><button onclick="borrarPersona(${row.id})">Borrar</button></td>
        </tr>
      `;
      cursor.continue();
    } else if (tbody.innerHTML === "") {
      tbody.innerHTML = '<tr><td colspan="4">Sin registros</td></tr>';
    }
  };
}

// --- Borrar persona ---
function borrarPersona(id) {
  const transaction = db.transaction([STORE_NAME], "readwrite");
  const store = transaction.objectStore(STORE_NAME);
  store.delete(id);

  transaction.oncomplete = () => {
    console.log(`🗑️ Persona con ID ${id} borrada`);
    mostrarPersona();
  };
}

// --- Borrar todo ---
function borrarTodo() {
  if (confirm("¿Seguro que quieres borrar todos los registros?")) {
    const transaction = db.transaction([STORE_NAME], "readwrite");
    const store = transaction.objectStore(STORE_NAME);
    store.clear();

    transaction.oncomplete = () => {
      console.log("🗑️ Todos los registros borrados");
      mostrarPersona();
    };
  }
}

// Exponer funciones al ámbito global (para usarlas en el HTML)
window.guardarPersona = guardarPersona;
window.borrarPersona = borrarPersona;
window.borrarTodo = borrarTodo;
