import { API_KEY } from "../constants/consts.js";
const TOKEN = localStorage.getItem("token");
const usersContainer = document.getElementById("usersContainer");
const usersMessage = document.getElementById("usersMessage");

/**
 * Fetch all users
 */
async function fetchUsers() {
    usersContainer.innerHTML = "";
    usersMessage.textContent = "";

    try {
        const res = await fetch("/api/admin/users/all", {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${TOKEN}`,
                "x-api-key": API_KEY,
            },
        });

        const json = await res.json();

        if (!res.ok) {
            usersMessage.textContent = json.message || "Failed to load users";
            return;
        }

        if (json.data.length === 0) {
            usersMessage.textContent = "No users found";
            return;
        }

        json.data.forEach((user) => renderUser(user));
    } catch (error) {
        console.error(error);
        usersMessage.textContent = "Server connection error";
    }
}

/**
 * Render single user
 */
function renderUser(user) {
    const div = document.createElement("div");
    div.className =
        "flex items-center justify-between border rounded-xl p-4 hover:bg-gray-50 transition";

    div.innerHTML = `
        <div>
            <p class="font-semibold text-gray-800">${user.name}</p>
            <p class="text-sm text-gray-500">${user.email}</p>
            <p class="text-xs text-gray-400">Role: ${user.role}</p>
        </div>

        <button
            onclick="deleteUser(${user.id})"
            class="px-4 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
            Delete
        </button>
    `;

    usersContainer.appendChild(div);
}

/**
 * Delete user
 */
async function deleteUser(userId) {
    if (!confirm("Are you sure you want to delete this user?")) return;

    try {
        const res = await fetch(`/api/admin/users/${userId}`, {
            method: "DELETE",
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${TOKEN}`,
                "x-api-key": API_KEY,
            },
        });

        const json = await res.json();

        if (!res.ok) {
            alert(json.message || "Failed to delete user");
            return;
        }

        fetchUsers();
    } catch (error) {
        console.error(error);
        alert("Server error");
    }
}

/**
 * Init
 */
document.addEventListener("DOMContentLoaded", fetchUsers);
window.deleteUser = deleteUser;
