# LUXECAST Demo Pack v2

**Premium Talent. On Demand.**

This is a GitHub-ready starter pack for **LUXECAST**, a premium digital talent agency platform.
It includes product documentation, frontend scaffolds, backend Laravel starter structure,
database schema starters, Postman collection, and Docker setup.

## Included
- Product overview and workflows
- Anti-bypass rules and operating logic
- Revenue model and projections
- React frontend starter scaffolds for:
  - Client app
  - Talent app
  - Admin portal
- Laravel backend starter structure:
  - Routes
  - Controllers
  - Services
  - Models
  - Migrations
  - Seeders
- Postman collection
- Docker Compose and env example

## Suggested Stack
- Frontend: React / Vite
- Backend: Laravel API
- Database: PostgreSQL
- Cache / Queues: Redis
- Payments: Stripe
- Storage: S3-compatible bucket

## Quick Start
### Frontend
Each frontend app is a starter shell. You can either:
1. create a fresh Vite app and copy the `src` files in, or
2. wire these files into an existing monorepo.

### Backend
Create a fresh Laravel app, then copy the contents of:
- `backend/laravel-api/routes`
- `backend/laravel-api/app`
- `backend/laravel-api/database`
- `backend/laravel-api/config`

### Infra
Use:
- `infra/docker-compose.yml`
- `infra/env.example`

## Core Business Model
- Talent pays listing subscription
- Platform charges commission on completed bookings
- Admin controls approval, risk, anti-bypass, payouts, and disputes

## Notes
This is a **starter pack**, not a full production application.
It is designed to save build time and give developers a serious head start.
