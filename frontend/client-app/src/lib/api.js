
const API_BASE = "http://127.0.0.1:8000/api";

export async function fetchTalent(filters = {}) {
  const params = new URLSearchParams(filters).toString();
  const res = await fetch(`${API_BASE}/talent/search?${params}`);
  if (!res.ok) throw new Error("Failed to fetch talent");
  return res.json();
}

export async function createBooking(payload, token) {
  const res = await fetch(`${API_BASE}/bookings`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${token}`,
    },
    body: JSON.stringify(payload),
  });

  if (!res.ok) throw new Error("Failed to create booking");
  return res.json();
}
