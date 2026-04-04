import React from "react";

const jobs = [
  { name: "Luxury skincare campaign", time: "Today 2:00 PM", fee: "$2,400" },
  { name: "Retail activation host", time: "Tomorrow 11:00 AM", fee: "$1,200" },
  { name: "Editorial test shoot", time: "Friday 9:00 AM", fee: "$900" },
];

export default function App() {
  return (
    <div className="page">
      <div className="shell">
        <div className="hero">
          <div>
            <span className="badge">LUXECAST TALENT APP</span>
            <div className="title">Your bookings, brand, and earnings</div>
            <div className="sub">Manage portfolio, availability, performance, and payouts from one premium dashboard.</div>
          </div>
          <button className="button">Go Available</button>
        </div>

        <div className="grid grid-4">
          <div className="card"><div className="kpi">Bookings this week</div><div className="value">9</div></div>
          <div className="card"><div className="kpi">Projected earnings</div><div className="value">$4.8k</div></div>
          <div className="card"><div className="kpi">Profile score</div><div className="value">96%</div></div>
          <div className="card"><div className="kpi">Average rating</div><div className="value">4.9</div></div>
        </div>

        <div style={{height:16}} />

        <div className="card">
          <div className="row">
            <div style={{fontSize:22, fontWeight:700, color:"#f1dfb0"}}>Upcoming bookings</div>
            <button className="button-outline">View Calendar</button>
          </div>
          <div style={{height:16}} />
          <div className="list">
            {jobs.map((job) => (
              <div key={job.name} className="row" style={{padding:"14px 16px", border:"1px solid rgba(212,175,55,0.12)", borderRadius:18}}>
                <div>
                  <div style={{fontWeight:700}}>{job.name}</div>
                  <div className="small">{job.time}</div>
                </div>
                <div style={{textAlign:"right"}}>
                  <div style={{color:"#d4af37", fontWeight:700}}>{job.fee}</div>
                  <div className="small">Confirmed</div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
}
