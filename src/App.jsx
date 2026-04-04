import React from "react";

const talent = [
  { name: "Aria Vale", role: "Editorial Model", rate: "$180/hr", rating: "4.9" },
  { name: "Mason Reed", role: "Commercial Talent", rate: "$220/hr", rating: "4.8" },
  { name: "Sofia Elan", role: "Brand Ambassador", rate: "$260/hr", rating: "5.0" },
];

export default function App() {
  return (
    <div className="page">
      <div className="shell">
        <div className="hero">
          <div>
            <span className="badge">LUXECAST CLIENT APP</span>
            <div className="title">Book premium talent fast</div>
            <div className="sub">Search verified talent, compare profiles, and secure bookings with protected payments and controlled communication.</div>
          </div>
          <button className="button">Post Casting Call</button>
        </div>

        <div className="grid grid-4">
          <div className="card"><div className="kpi">Open bookings</div><div className="value">12</div></div>
          <div className="card"><div className="kpi">Saved talent</div><div className="value">28</div></div>
          <div className="card"><div className="kpi">Upcoming shoots</div><div className="value">6</div></div>
          <div className="card"><div className="kpi">Spend this month</div><div className="value">$18.4k</div></div>
        </div>

        <div style={{height:16}} />

        <div className="grid grid-3">
          {talent.map((item) => (
            <div className="card" key={item.name}>
              <div className="row">
                <div>
                  <div style={{fontWeight:700}}>{item.name}</div>
                  <div className="small">{item.role}</div>
                </div>
                <div style={{textAlign:"right"}}>
                  <div style={{color:"#d4af37", fontWeight:700}}>{item.rate}</div>
                  <div className="small">★ {item.rating}</div>
                </div>
              </div>
              <div style={{height:14}} />
              <div className="row">
                <button className="button">Book Now</button>
                <button className="button-outline">View Profile</button>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}
