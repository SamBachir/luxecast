import React from "react";

export default function App() {
  return (
    <div className="page">
      <div className="shell">
        <div className="hero">
          <div>
            <span className="badge">LUXECAST ADMIN PORTAL</span>
            <div className="title">Command the platform</div>
            <div className="sub">Monitor supply quality, bookings, revenue, disputes, anti-bypass enforcement, and overall platform health.</div>
          </div>
          <button className="button">Open Risk Center</button>
        </div>

        <div className="grid grid-4">
          <div className="card"><div className="kpi">Active talent</div><div className="value">370</div></div>
          <div className="card"><div className="kpi">Live bookings</div><div className="value">135</div></div>
          <div className="card"><div className="kpi">Revenue today</div><div className="value">$12.5k</div></div>
          <div className="card"><div className="kpi">Pending approvals</div><div className="value">18</div></div>
        </div>

        <div style={{height:16}} />

        <div className="grid grid-3">
          <div className="card">
            <div style={{fontWeight:700, color:"#f1dfb0"}}>Risk Alerts</div>
            <div style={{height:12}} />
            <div className="small">4 contact-sharing flags</div>
            <div className="small">2 payment disputes</div>
            <div className="small">1 suspected off-platform repeat booking</div>
          </div>
          <div className="card">
            <div style={{fontWeight:700, color:"#f1dfb0"}}>Payments</div>
            <div style={{height:12}} />
            <div className="small">Payouts on hold: $6,420</div>
            <div className="small">Weekly subscriptions: $29,500</div>
            <div className="small">Commission revenue: $81,000</div>
          </div>
          <div className="card">
            <div style={{fontWeight:700, color:"#f1dfb0"}}>Operations</div>
            <div style={{height:12}} />
            <div className="small">Avg. approval time: 9 hrs</div>
            <div className="small">Dispute resolution SLA: 24 hrs</div>
            <div className="small">Fill rate: 82%</div>
          </div>
        </div>
      </div>
    </div>
  );
}
