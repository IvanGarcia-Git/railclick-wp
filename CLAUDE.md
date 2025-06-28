# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Structure

This is a hybrid WordPress + Next.js project with two main components:

1. **WordPress Installation** (root directory): Standard WordPress installation for content management and backend functionality
2. **Next.js Application** (`base_project/`): Modern React-based frontend using Next.js 15, TypeScript, and Tailwind CSS

## Development Commands

### Next.js Application (base_project/)
```bash
cd base_project/
npm run dev        # Start development server
npm run build      # Build for production  
npm run start      # Start production server
npm run lint       # Run ESLint
```

### Database Setup
SQL scripts are located in `base_project/scripts/`:
- Authentication tables: `01-create-auth-tables.sql` or `01-create-auth-tables-fixed.sql`
- Configuration tables: `02-create-config-tables.sql`
- Demo user creation: `03-create-demo-user.sql` and `04-insert-demo-user.sql`
- SEO functionality: `05-create-seo-table.sql`

## Architecture Overview

### Next.js Frontend (`base_project/`)
- **Framework**: Next.js 15.2.4 with React 19
- **Styling**: Tailwind CSS with custom components
- **UI Components**: Radix UI primitives with shadcn/ui design system
- **State Management**: React Hook Form for forms, Supabase for backend integration
- **Authentication**: Supabase Auth (@supabase/ssr, @supabase/supabase-js)
- **Data Visualization**: Recharts for charts and graphs

### Key Dependencies
- **UI**: Radix UI components, Lucide React icons, Sonner for toasts
- **Forms**: React Hook Form with Zod validation
- **Styling**: Tailwind CSS with animations, class-variance-authority for variants
- **Theming**: Next-themes for dark/light mode support

### WordPress Backend
- Standard WordPress installation for content management
- Serves as headless CMS or traditional WordPress site
- Located in root directory with standard wp-admin, wp-content, wp-includes structure

## Important Notes

- The project uses pnpm for package management (evidenced by `pnpm-lock.yaml`)
- TypeScript is configured throughout the Next.js application
- The application appears to be designed for modern web development with focus on user experience and performance
- Database setup requires running SQL scripts in sequence for proper functionality