// redeploy trigger
import React, { useEffect, useState } from "react";
import { fetchTalent } from "./lib/api";

export default function App() {
  const [talent, setTalent] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    async function loadTalent() {
      try {
        const data = await fetchTalent({ city: "Sydney" });
        setTalent(data.results || []);
      } catch (err) {
        console.error("API error:", err);
      } finally {
        setLoading(false);
      }
    }

    loadTalent();
  }, []);

  return (
    <div style={{ padding: 40 }}>
      <h1>LUXECAST (Connected to Backend)</h1>

      {loading && <p>Loading talent...</p>}

      {!loading && talent.length === 0 && (
        <p>No talent found (backend connected but empty DB)</p>
      )}

      {talent.map((t) => (
        <div key={t.id} style={{ marginBottom: 10 }}>
          <strong>{t.stage_name}</strong> — ${t.hourly_rate}/hr
        </div>
      ))}
    </div>
  );
}
